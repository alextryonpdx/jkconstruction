4�X<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:246:"
				SELECT post_type, MAX(post_modified_gmt) AS date
				FROM jk_posts
				WHERE post_status IN ('publish','inherit')
					AND post_type IN ('post','page','attachment','testimonial')
				GROUP BY post_type
				ORDER BY post_modified_gmt DESC
			";s:11:"last_result";a:4:{i:0;O:8:"stdClass":2:{s:9:"post_type";s:4:"page";s:4:"date";s:19:"2017-04-05 21:33:48";}i:1;O:8:"stdClass":2:{s:9:"post_type";s:4:"post";s:4:"date";s:19:"2016-02-08 10:40:50";}i:2;O:8:"stdClass":2:{s:9:"post_type";s:11:"testimonial";s:4:"date";s:19:"2017-04-05 23:30:51";}i:3;O:8:"stdClass":2:{s:9:"post_type";s:10:"attachment";s:4:"date";s:19:"2016-05-19 10:31:21";}}s:8:"col_info";a:2:{i:0;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"jk_posts";s:3:"def";s:0:"";s:10:"max_length";i:11;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:4:"date";s:5:"table";s:0:"";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}