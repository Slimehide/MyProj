<header>
	<div class="container">
		<div class="outer__header">
			<div class="left__header">
				<a href="#">Anime<span>Something</span></a>
			</div>
			<div class="right__header">
				<?php 
					if (isset($_SESSION['name'])) {?>
						<div class="profile__header">
							<div class="profile__main">
								<a href="#"><img src="img/profiles/1/avatar.jpg" alt="avatar"></a>
							</div>
							<div class="notification__profile">
								<a href="#">
									<i class="fas fa-bell"></i>
									<span>4</span>
								</a>
							</div>
							<div class="messages__profile">
								<a href="#"><i class="fas fa-envelope"></i>
									<span>4</span>
								</a>
							</div>
							<div class="logout__profile">
								<a href="#">
									<i class="fas fa-sign-out-alt"></i>
								</a>
							</div>
						</div> 
					<?php } else { ?>
						<div class="header__buttons">
							<div class="login__header">
			        			<a href="#" class="login__button">Вход</a>
			        		</div>      
			        		<div class="register__header">
			        			<a href="#">Регистрация</a>
			        		</div>
						</div>
					<?php } ?>
        		      		
			</div>
		</div>
	</div>
</header>