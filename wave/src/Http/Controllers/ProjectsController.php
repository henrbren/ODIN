<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use Wave\Projects;


class ProjectsController extends \App\Http\Controllers\Controller
{
    public function index(){
    	
        $projects = Projects::orderBy('created_at', 'DESC')->paginate(6);

    	$seo = [
    		'seo_title' => 'Projects',
            'seo_description' => 'Your Project',
       	];

    	return view('theme::projects.index', compact('projects', 'seo'));
    }


    public function post($category, $slug){

    	$projects = Projects::where('slug', '=', $slug)->firstOrFail();

        $seo = [
            'seo_title' => $post->title,
            'seo_description' => $post->seo_description,
        ];

    	return view('theme::projects.post', compact('post', 'seo'));
    }
}
