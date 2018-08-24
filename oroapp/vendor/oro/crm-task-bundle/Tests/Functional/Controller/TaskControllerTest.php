<?php

namespace Oro\Bundle\TaskBundle\Tests\Functional\Controller;

use Symfony\Component\HttpFoundation\Response;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

class TaskControllerTest extends WebTestCase
{
    protected function setUp()
    {
        $this->initClient(array(), $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);
    }

    public function testCreate()
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_task_create'));
        $form = $crawler->selectButton('Save and Close')->form();
        $form['oro_task[subject]'] = 'New task';
        $form['oro_task[description]'] = 'New description';
        // set DueDate = now + 10 min to prevent "Due date must not be in the past" error
        $dueDate = new \DateTime(
            'now',
            new \DateTimeZone($this->getContainer()->get('oro_locale.settings')->getTimeZone())
        );
        $form['oro_task[dueDate]'] = $dueDate
            ->add(new \DateInterval('PT10M'))
            ->format(\DateTime::RFC3339);
        $form['oro_task[owner]'] = '1';

        $this->client->followRedirects(true);
        $crawler = $this->client->submit($form);

        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertContains("Task saved", $crawler->html());
    }

    /**
     * @depends testCreate
     */
    public function testUpdate()
    {
        $response = $this->client->requestGrid(
            'tasks-grid',
            array('tasks-grid[_filter][ownerName][value]' => 'John Doe')
        );

        $result = $this->getJsonResponseContent($response, 200);
        $result = reset($result['data']);

        $crawler = $this->client->request(
            'GET',
            $this->getUrl('oro_task_update', array('id' => $result['id']))
        );

        $form = $crawler->selectButton('Save and Close')->form();
        $form['oro_task[subject]'] = 'Task updated';
        $form['oro_task[description]'] = 'Description updated';

        $this->client->followRedirects(true);
        $crawler = $this->client->submit($form);

        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertContains("Task saved", $crawler->html());
    }

    /**
     * @depends testUpdate
     */
    public function testView()
    {
        $response = $this->client->requestGrid(
            'tasks-grid',
            array('tasks-grid[_filter][ownerName][value]' => 'John Doe')
        );

        $result = $this->getJsonResponseContent($response, 200);
        $result = reset($result['data']);

        $this->client->request(
            'GET',
            $this->getUrl('oro_task_view', array('id' => $result['id']))
        );

        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertContains('Task updated - Tasks - Activities', $result->getContent());
    }

    /**
     * @depends testUpdate
     */
    public function testIndex()
    {
        $this->client->request('GET', $this->getUrl('oro_task_index'));
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertContains('Task updated', $result->getContent());
    }

    /**
     * @depends testUpdate
     */
    public function testTasksWidgetAction()
    {
        $this->client->request('GET', $this->getUrl('oro_task_widget_sidebar_tasks'));
        $response = $this->client->getResponse();

        $this->assertJsonResponseStatusCodeEquals($response, Response::HTTP_OK);
        $this->assertContains('Task updated', $response->getContent());
    }
}
