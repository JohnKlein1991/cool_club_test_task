<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * Class SendEmailRequestTest
 * @package Tests\Feature
 */
class SendEmailRequestTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSendPostRequestWithoutBody()
    {
        $response = $this->post('/api/email');

        $response->assertStatus(422);
    }

    /**
     * Тестирование со слишком маленьким текстом письма
     */
    public function testSendPostRequestWithIncorrectContent()
    {
        $response = $this->post('/api/email', [
            'content' => '__'
        ]);

        $response->assertStatus(422);
    }

    /**
     *  Тест для корректного запроса: ответ 200 и в БД новая запись
     */
    public function testSendPostRequestWithCorrectContent()
    {
        $testContent = date('Y-m-d') . 'test' . rand(1, 100);

        $this->assertDatabaseMissing('sent_emails', [
            'content' => $testContent
        ]);
        $response = $this->post('/api/email', [
           'content' => $testContent
        ]);

        $this->assertDatabaseHas('sent_emails', [
            'content' => $testContent
        ]);
        $response->assertStatus(200);
    }
}
