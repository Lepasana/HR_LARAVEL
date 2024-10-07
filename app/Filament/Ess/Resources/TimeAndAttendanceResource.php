<?php

namespace App\Filament\Ess\Resources;

use App\Filament\Ess\Resources\TimeAndAttendanceResource\Pages;
use App\Filament\Ess\Resources\TimeAndAttendanceResource\RelationManagers;
use App\Models\TimeAndAttendance;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TimeAndAttendanceResource extends Resource
{
  protected static ?string $model = TimeAndAttendance::class;

  protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Select::make('employee_id')
          ->relationship('employee', 'name')
          ->required(),

        TimePicker::make('time_in')
          ->label('Time In')
          ->required(),

        TimePicker::make('time_out')
          ->label('Time Out')
          ->required(),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        TextColumn::make('employee.id')
          ->label('Employee ID')
          ->sortable()
          ->searchable(),

          TextColumn::make('employee.name')
          ->label('Employee Name')
          ->sortable()
          ->searchable(),


          TextColumn::make('time_in')
          ->label('Time In')
          ->sortable()
          ->searchable(),

          TextColumn::make('time_out')
          ->label('Time Out')
          ->sortable()
          ->searchable(),

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
      'index' => Pages\ListTimeAndAttendances::route('/'),
      'create' => Pages\CreateTimeAndAttendance::route('/create'),
      'edit' => Pages\EditTimeAndAttendance::route('/{record}/edit'),
    ];
  }
}
