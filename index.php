<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Pincho Vicara > Accueil</title>
		<meta charset="utf-8">
		<style type="text/css">
			body{
				margin: 0;
				padding: 0;
				background: #272727;
				color: #BDBDBD;
			}

			h1{
				text-align: center;
				font-size: 3em;
			}

			ul{
				list-style: none;
				margin: 0px;
				padding: 0px;
			}

			li{
				margin-top: 10px;
				margin-bottom: 10px;
			}

			.droite{
				text-align: right;
			}

			.gauche{
				text-align: left;
			}

			.lien{
				width: 100%;

				background-position: center;
				background-size: 1920px;
				overflow: hidden;
			}

			.textelien{
				visibility: hidden;
				text-align: center;
				padding-top: 100px;
				padding-bottom: 100px;
				font-size: 3em;
			}

			a{
				color: #BDBDBD;
				text-decoration: none;
			}

			.lien:hover .textelien{
				visibility: visible;
			}

			.lien:hover .masque{
				-moz-opacity: 0.70;
				opacity: 0.7;
				visibility: visible;
			}

			.masque{
				background-color: black;
				visibility: hidden;
			}
		</style>
	</head>
	<body>
	<h1>Pincho Vicara</h1>
	<ul>
		<li class="gauche">
			<a href="../pv_photos">
				<div class="lien" style="background-image: url('images/photos.jpg');">
					<div class="masque">
						<div class="textelien">
							Photos
						</div>
					</div>
				</div>
			</a>
		</li>
		<li class="droite">
			<a href="../pv_videos"><div class="lien" style="background-image: url('images/videos.jpg');"><div class="masque"><div class="textelien">Vidéos</div></div></div></a>
		</li>
	</ul>
	</body>
</html>