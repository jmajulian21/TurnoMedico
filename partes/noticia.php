  <!--<?php
				  /*$xml = simplexml_load_file("http://tn.com.ar/rss.xml");
				  $i = 0;
				  $maxiterations = 3;
				  foreach ($xml->channel->item as $item) {
				  	 if ($i < $maxiterations) {
				  	echo '<h4>'.$item->title.'</h4><br>';
				  	echo $item->description.'<br>';
				  	$namespaces = $item->getNameSpaces(true);
					$media = $item->children($namespaces['media']);
					$atributo = $media->content->attributes();
					echo  "<img src=".$atributo['url']." style='width: 250px; height: 100px'><br>";
						$i++;
					}else{break;}

				  }*/
				?>-->

<h3>YouTube</h3>
			<div class="video">
				<object width="500" height="400">
					<param name="movie" value="http://www.youtube.com/v/NmRTreaCJXs?version=3">
					</param>
					<param name="allowFullScreen" value="true">
					</param>
					<param name="allowscriptaccess" value="always">
					</param>
					<param name="wmode" value="transparent">
					</param>
					<iframe width="440" height="260" src="https://www.youtube.com/watch?v=jsVaBehFcbM" frameborder="0" allowfullscreen></iframe>
				</object>
			</div>
			<!-- /.video -->