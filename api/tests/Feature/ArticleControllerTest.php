<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_shows_articles()
    {
        $article = Article::factory()->create();

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee($article->title);
    }

    public function test_show_displays_article()
    {
        $article = Article::factory()->create();

        $response = $this->get("/article/show/{$article->id}");

        $response->assertStatus(200);
        $response->assertSee($article->title);
        $response->assertSee($article->body);
    }

    public function test_create_shows_create_form()
    {
        $response = $this->get('/article/create');

        $response->assertStatus(200);
        $response->assertSee('Create Article');
    }

    public function test_store_saves_new_article()
    {
        $response = $this->post('/article', [
            'title' => '新しい記事',
            'body' => 'これは新しい記事の本文です。'
        ]);

        $response->assertRedirect('/');
        $this->assertCount(1, Article::all());
    }

    public function test_edit_shows_edit_form()
    {
        $article = Article::factory()->create();

        $response = $this->get("/article/{$article->id}/edit");

        $response->assertStatus(200);
        $response->assertSee('Edit Article');
        $response->assertSee($article->title);
    }

    public function test_update_updates_article()
    {
        $article = Article::factory()->create();

        $response = $this->put("/article/{$article->id}", [
            'title' => '更新されたタイトル',
            'body' => '更新された本文'
        ]);

        $response->assertRedirect('/');
        $article = $article->fresh();
        $this->assertEquals('更新されたタイトル', $article->title);
        $this->assertEquals('更新された本文', $article->body);
    }

    public function test_destroy_deletes_article()
    {
        $article = Article::factory()->create();

        $response = $this->delete("/article/{$article->id}");

        $response->assertRedirect('/');
        $this->assertCount(0, Article::all());
    }
}