<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class PageMiddlewareForRolesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     public function testUserCanLoginThroughTheForm(){
        $user = User::factory()->create();

        $response = $this->post('/login',[
            'email' => $user->email,
            'password' => 'password'
           
        ]);
        $this->assertAuthenticated();

        $response->assertRedirect('/home');
     }

     public function testUserCannotAccessAdminPage(){
        $user = User::factory()->create();

        $response = $this->post('/login',[
            'email' => $user->email,
            'password' => 'password'
           
        ]);
        $this->get('admin/users');
        $response->assertRedirect('/home');
     }

     public function testUserCanAccessAdminPage(){
        $user = User::factory()->create();

        $user->roles()->attach(1);

        $this->post('/login',[
            'email' => $user->email,
            'password' => 'password'
           
        ]);
        $response = $this->get('admin/users');
        $response->assertSeeText('Platform Users');
     }


     public function testUserCannotAccessCreateAJobsPage()
     {
   
        $user = User::factory()->create();


        $this->post('/login',[
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response = $this->get('jobs/create');
        $response->assertRedirect('/');

     }
     public function testAdminCanAccessCreateAJobsPage()
     {
   
        $user = User::factory()->create();

        $user->roles()->attach(1);

        $this->post('/login',[
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response = $this->get('jobs/create');
        $response->assertSeeText('Create A New Job');

     }


     public function testUserCannotAccessApplicationsPages()
     {
   
        $user = User::factory()->create();


        $this->post('/login',[
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response = $this->get('applications');
        $response->assertRedirect('/');

     }
     public function testAdminCanAccessApplicationsPage()
     {
   
        $user = User::factory()->create();

        $user->roles()->attach(1);

        $this->post('/login',[
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response = $this->get('/applications');
        $response->assertSeeText('Applications');

     }


     public function testUserCannotUpdateApplicationsStatus()
     {
   
        $user = User::factory()->create();


        $this->post('/login',[
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response = $this->get('applications/edit/{id}');
        $response->assertRedirect('/');

     }
     public function testAdminCanUpdateApplicationsStatus()
     {
   
        $user = User::factory()->create();

        $user->roles()->attach(1);

        $this->post('/login',[
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response = $this->get('applications/edit/{id}');
        $response->assertSeeText('Update Application Status');

     }




}
