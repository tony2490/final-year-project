<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function testDatabaseHasNewJobCreation()
    {
        $user = User::factory()->create();
    
        $user->roles()->attach(1);
    
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password'
        ]);
    
    
        $this->post('jobs', [
            'hiringManager' => 'John Doe', 
            'moduleCode' => 'CS123',
            'jobDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec ex congue, cursus tellus ac, consequat nibh. Maecenas eget augue semper magna gravida imperdiet sed consequat augue. Quisque iaculis congue libero, eget pharetra erat bibendum venenatis. Nulla metus ex, posuere eget tellus sed, sollicitudin sollicitudin tellus. Vivamus varius tortor imperdiet, finibus lacus at, maximus nibh. Vivamus luctus, magna et viverra luctus, eros turpis commodo lacus, vel mattis urna lacus sit amet sapien. Cras vestibulum finibus diam, interdum varius lectus suscipit at. Sed lobortis ex orci, quis egestas diam mollis in. Duis nec ultricies dui, mollis blandit dolor. Duis sit amet arcu dolor. Nam semper elementum finibus. Nulla non elit nunc. Maecenas vitae ex ac dui auctor molestie eget nec nisl. Suspendisse tellus urna, maximus sit amet orci quis, tempor hendrerit nibh.        ',
            'hourlyRate' => '1',
            'positionsAvailable' => '3',
            'closingDate' => '2023-04-09'
        ]);


        $this->assertDatabaseHas('jobs', [
            'hiringManager' => 'John Doe', 
            'moduleCode' => 'CS123',
            'jobDescription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec ex congue, cursus tellus ac, consequat nibh. Maecenas eget augue semper magna gravida imperdiet sed consequat augue. Quisque iaculis congue libero, eget pharetra erat bibendum venenatis. Nulla metus ex, posuere eget tellus sed, sollicitudin sollicitudin tellus. Vivamus varius tortor imperdiet, finibus lacus at, maximus nibh. Vivamus luctus, magna et viverra luctus, eros turpis commodo lacus, vel mattis urna lacus sit amet sapien. Cras vestibulum finibus diam, interdum varius lectus suscipit at. Sed lobortis ex orci, quis egestas diam mollis in. Duis nec ultricies dui, mollis blandit dolor. Duis sit amet arcu dolor. Nam semper elementum finibus. Nulla non elit nunc. Maecenas vitae ex ac dui auctor molestie eget nec nisl. Suspendisse tellus urna, maximus sit amet orci quis, tempor hendrerit nibh.        ',
            'hourlyRate' => '1',
            'positionsAvailable' => '3',
            'closingDate' => '2023-04-09'
        ]);

    }


    public function testDatabaseHasUserSubmittedApplication()
{
    $admin = User::factory()->create();

    $this->post('/login', [
        'email' => $admin->email,
        'password' => 'password'
    ]);


    $this->post('applications', [
     

        'name' => 'John Doe',
        'user_id'  => '55',
        'email'  => 'testing@aston.ac.uk',
        'role'  => 'TEST123',
        'astonID'  => '555555555',
        'studentType'  => 'Final Year Student',
        'courseStudied'  => 'CS000 CS001',
        'relevantModuleGrades' => '1:1 2:1',
        'reasonForApplying'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec ex congue, cursus tellus ac, consequat nibh. Maecenas eget augue semper magna gravida imperdiet sed consequat augue. Quisque iaculis congue libero, eget pharetra erat bibendum venenatis. Nulla metus ex, posuere eget tellus sed, sollicitudin sollicitudin tellus. Vivamus varius tortor imperdiet, finibus lacus at, maximus nibh. Vivamus luctus, magna et viverra luctus, eros turpis commodo lacus, vel mattis urna lacus sit amet sapien. Cras vestibulum finibus diam, interdum varius lectus suscipit at. Sed lobortis ex orci, quis egestas diam mollis in. Duis nec ultricies dui, mollis blandit dolor. Duis sit amet arcu dolor. Nam semper elementum finibus. Nulla non elit nunc. Maecenas vitae ex ac dui auctor molestie eget nec nisl. Suspendisse tellus urna, maximus sit amet orci quis, tempor hendrerit nibh.',
        'unavailableDates'  => '2023-04-09',
        'placementComplete'  => 'Yes',
        'supportingInfo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec ex congue, cursus tellus ac, consequat nibh. Maecenas eget augue semper magna gravida imperdiet sed consequat augue. Quisque iaculis congue libero, eget pharetra erat bibendum venenatis. Nulla metus ex, posuere eget tellus sed, sollicitudin sollicitudin tellus. Vivamus varius tortor imperdiet, finibus lacus at, maximus nibh. Vivamus luctus, magna et viverra luctus, eros turpis commodo lacus, vel mattis urna lacus sit amet sapien. Cras vestibulum finibus diam, interdum varius lectus suscipit at. Sed lobortis ex orci, quis egestas diam mollis in. Duis nec ultricies dui, mollis blandit dolor. Duis sit amet arcu dolor. Nam semper elementum finibus. Nulla non elit nunc. Maecenas vitae ex ac dui auctor molestie eget nec nisl. Suspendisse tellus urna, maximus sit amet orci quis, tempor hendrerit nibh.        ',
        'status'  => 'Under Review'
    ]); 

 

    $this->assertDatabaseHas('applications', [
     

        'name' => 'John Doe',
        'user_id'  => '55',
        'email'  => 'testing@aston.ac.uk',
        'role'  => 'TEST123',
        'astonID'  => '555555555',
        'studentType'  => 'Final Year Student',
        'courseStudied'  => 'CS000 CS001',
        'relevantModuleGrades' => '1:1 2:1',
        'reasonForApplying'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec ex congue, cursus tellus ac, consequat nibh. Maecenas eget augue semper magna gravida imperdiet sed consequat augue. Quisque iaculis congue libero, eget pharetra erat bibendum venenatis. Nulla metus ex, posuere eget tellus sed, sollicitudin sollicitudin tellus. Vivamus varius tortor imperdiet, finibus lacus at, maximus nibh. Vivamus luctus, magna et viverra luctus, eros turpis commodo lacus, vel mattis urna lacus sit amet sapien. Cras vestibulum finibus diam, interdum varius lectus suscipit at. Sed lobortis ex orci, quis egestas diam mollis in. Duis nec ultricies dui, mollis blandit dolor. Duis sit amet arcu dolor. Nam semper elementum finibus. Nulla non elit nunc. Maecenas vitae ex ac dui auctor molestie eget nec nisl. Suspendisse tellus urna, maximus sit amet orci quis, tempor hendrerit nibh.',
        'unavailableDates'  => '2023-04-09',
        'placementComplete'  => 'Yes',
        'supportingInfo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec ex congue, cursus tellus ac, consequat nibh. Maecenas eget augue semper magna gravida imperdiet sed consequat augue. Quisque iaculis congue libero, eget pharetra erat bibendum venenatis. Nulla metus ex, posuere eget tellus sed, sollicitudin sollicitudin tellus. Vivamus varius tortor imperdiet, finibus lacus at, maximus nibh. Vivamus luctus, magna et viverra luctus, eros turpis commodo lacus, vel mattis urna lacus sit amet sapien. Cras vestibulum finibus diam, interdum varius lectus suscipit at. Sed lobortis ex orci, quis egestas diam mollis in. Duis nec ultricies dui, mollis blandit dolor. Duis sit amet arcu dolor. Nam semper elementum finibus. Nulla non elit nunc. Maecenas vitae ex ac dui auctor molestie eget nec nisl. Suspendisse tellus urna, maximus sit amet orci quis, tempor hendrerit nibh.        ',
        'status'  => 'Under Review'
    ]); 

    }

}
