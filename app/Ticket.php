<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
	   protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
	   public function user()
	{
			return $this->belongsTo('App\User'); // we tell that tickets belong to user by create ticket
	}
		public function getTitle()
	{ 
		// we can now access any ticket data by using this model
		// koji je direktni model migracije table ticket
			return $this->title;
	}
	public function comments()
	{
			return $this->morphMany('App\Comment', 'post');
	}
}

