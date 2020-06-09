<?php

use App\Comment;
use App\FeaturedProject;


function postImage($path)
  	{
  		 //return $path ? asset(Voyager::image($path)) : asset('img/product/noimage.jpg');
      return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/product/noimage.jpg');
  	}

function checkCommentRef($id)
	{
		$checkComment = Comment::where('ref', $id)->orderBy('id', 'desc')->get()->take(4);

		if (!$checkComment) 
			{
				return false;
			}

		return $checkComment;
	}  	

function getProjects($name)
	{
		$projects = FeaturedProject::where('scope', 'like', '%'. $name. '%')->get()->take(6);

		return $projects;
	}