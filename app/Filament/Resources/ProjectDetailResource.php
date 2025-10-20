<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectDetailResource\Pages;
use App\Filament\Resources\ProjectDetailResource\RelationManagers;
use App\Models\Project;
use App\Models\ProjectDetail;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Drivers\Gd\Encoders\JpegEncoder;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

class ProjectDetailResource extends Resource
{
    protected static ?string $model = ProjectDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    protected static ?string $navigationGroup = 'Pengaturan Project';

    public static function form(Form $form): Form
    {

        return $form
           ->schema([
            Select::make('project_id')
                    ->label('Project')
                    ->relationship('project', 'name')
                    ->options(function () {
                        return Project::with('projectCategory')
                            ->where('index', '>', '0')
                            ->get()
                            ->mapWithKeys(function ($project) {
                                return [$project->id => $project->name . ' - ' . ($project->projectCategory->title ?? '')];
                            });
                    })
                    ->searchable()
                    ->required(),
                TextInput::make('title')->label('Judul')->required(),
                TextInput::make('index')->label('Indeks')->minValue(0)->required(),
                FileUpload::make('image')
                    ->label('Gambar (645 x 600)')
                    ->directory('images/project-details') // Direktori penyimpanan di `storage/app/public`
                    ->image() // Validasi gambar
                    ->required()
                    ->maxSize(2048)
                    ->afterStateUpdated(function ($state, callable $set) {
                        if (!$state instanceof TemporaryUploadedFile) {
                            return;
                        }

                        // **1. Simpan file langsung ke storage publik**
                        $fileName = 'owner_' . time() . '.' . $state->getClientOriginalExtension();

                        $storedPath = $state->storePubliclyAs('images/project-details', $fileName, 'public');


                        // **2. Dapatkan path asli file di storage publik**
                        $publicPath = 'images/project-details/' . $fileName;
                        $storagePath = Storage::disk('public')->path($publicPath);

                        // **3. Debugging: Pastikan file ada setelah disimpan**
                        if (!Storage::disk('public')->exists($publicPath)) {
                            dd("File tidak ditemukan setelah disimpan: " . $storagePath);
                        }

                        // **4. Gunakan realpath() untuk memastikan path benar**
                        $realPath = realpath($storagePath);
                        if (!$realPath) {
                            dd("Path tidak valid: " . $storagePath);
                        }

                        // **5. Pastikan file adalah gambar valid**
                        $mimeType = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $realPath);
                        if (!in_array($mimeType, ['image/jpeg', 'image/png', 'image/gif', 'image/webp'])) {
                            // dd("File bukan gambar yang valid: " . $realPath . ' | MIME Type: " . $mimeType);
                            dd("file bukan gambar yang valid");
                        }

                        // **6. Inisialisasi ImageManager dengan driver GD**
                        $manager = new ImageManager(new Driver());

                        // **7. Resize menggunakan Intervention Image v3**
                        try {
                            $image = $manager->read($realPath)
                                ->cover(645, 600)
                                ->encode(new JpegEncoder(quality: 80)); // Encode sebagai JPG

                            // **8. Simpan ulang gambar yang sudah di-resize ke storage publik**
                            Storage::disk('public')->put($publicPath, (string) $image);

                            // **9. Simpan path gambar ke database**
                            $set('image', [$publicPath]);
                        } catch (\Exception $e) {
                            dd("Error memproses gambar: " . $e->getMessage());
                        }
                    }),

            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('project.name')
                ->label('Project')
                ->sortable()
                ->formatStateUsing(function ($state, $record) {
                    $projectName = $record->project->name ?? '-';
                    $categoryTitle = $record->project->projectCategory->title ?? '-';
                    return "{$projectName} - {$categoryTitle}";
                }),
                TextColumn::make('title')->label('Judul Detail')->searchable(['title']),
                TextColumn::make('index')->label('Indeks'),
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->size(50), // Ukuran gambar
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjectDetails::route('/'),
            'create' => Pages\CreateProjectDetail::route('/create'),
            'edit' => Pages\EditProjectDetail::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Detail Project';
    }

    public static function getModelLabel(): string
    {
        return __('Detail Project'); // Label singular
    }

    public static function getPluralModelLabel(): string
    {
        return __('Data Detail Project'); // Label plural
    }

    public static function canViewAny(): bool
    {
        return Auth::user()?->role  === 'admin'; // ✅ Hanya admin yang bisa melihat
    }
}
