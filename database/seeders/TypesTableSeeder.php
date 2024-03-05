<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Educational Institutions',
            'Financial Institutions',
            'Healthcare Institutions',
            'Government Institutions',
            'Nonprofit Organizations',
            'Research Institutions',
            'Cultural Institutions',
            'Legal Institutions',
            'Media Institutions',
            'Technology Institutions',
        ];

        foreach ($types as $typeName) {
            Type::create([
                'label' => $typeName,
            ]);
        }
    }
}
