<?php

namespace Tests\Browser;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FirstWeekTest extends DuskTestCase
{
    use DatabaseMigrations;


    /** @test */
    public function when_click_on_categories_its_seems()
    {
        $category1 = Category::factory()->create([
            'name' => 'Videojuegos'
        ]);
        $category2 = Category::factory()->create([
            'name' => 'Moda'
        ]);
        $category3 = Category::factory()->create([
            'name' => 'Electronica'
        ]);
        $category4 = Category::factory()->create([
            'name' => 'Cocina'
        ]);

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertVisible('#category')
                ->click('#category')
                ->assertSee('Videojuegos')
                ->assertSee('Moda')
                ->assertSee('Electronica')
                ->assertSee('Cocina')
                ->screenshot('pincho');
        });
    }

    /** @test */
    public function when_click_on_subcategories_its_seems()
    {
        $category1 = Category::factory()->create([
            'name' => 'Videojuegos'
        ]);

        $subcategory3 = Subcategory::factory()->create([
            'category_id' => $category1->id,
        ]);

        $category2 = Category::factory()->create([
            'name' => 'Moda'
        ]);

        $subcategory1 = Subcategory::factory()->create([
            'category_id' => $category2->id,
        ]);

        $subcategory2 = Subcategory::factory()->create([
            'category_id' => $category2->id,
        ]);

        $this->browse(function (Browser $browser) use ($category1, $category2, $subcategory1, $subcategory2, $subcategory3){
            $browser->visit('/')
                ->assertVisible('#category')
                ->click('#category')
                ->assertSee($category1->name)
                ->assertSee($subcategory3->name)
                ->assertSee($category2->name)
                ->mouseover('@category_' . $category2->id)
                ->screenshot('pincho2');
                //->assertSee($subcategory1->name)
                //->assertSee($subcategory2->name)

        });
    }

}
