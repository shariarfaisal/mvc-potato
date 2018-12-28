<?php

	class Main{

		private $url;
		private $ctrlName = 'Index';
		private $methodName = 'home';
		private $ctrlPath = 'app/controllers/';
		private $ctrl;

		function __construct(){
			$this->getUrl();
			$this->loadCtrl();
			$this->loadMethod();
		}

		public function getUrl(){
			$this->url = isset($_GET['url']) ? $_GET['url'] : NULL ;

			if($this->url != NULL){
				$this->url = rtrim($this->url , '/');
				$this->url = explode('/',filter_var($this->url,FILTER_SANITIZE_URL));
			}else{
				unset($this->url);
			}
		}

		public function loadCtrl(){
			if(!isset($this->url[0])){
				include $this->ctrlPath.$this->ctrlName.'.php';
				$this->ctrl = new $this->ctrlName();
				$this->ctrl->{$this->methodName}();
			}else{
				$this->ctrlName = $this->url[0];
				$filename = $this->ctrlPath.$this->ctrlName.'.php';
				if(file_exists($filename)){
					include $filename;
					$this->ctrl = new $this->ctrlName();
				}else{
					header("Location:".BASE_URL);
				}
			}
		}


		public function loadMethod(){

			if(isset($this->url[2])){
				$this->methodName = $this->url[1];
				if(method_exists($this->ctrl,$this->methodName)){
					$this->ctrl->{$this->methodName}($this->url[2]);

				}else{
					header("Location:".BASE_URL);
				}
			}else{
				if(isset($this->url[1])){
					$this->methodName = $this->url[1];
					if(method_exists($this->ctrl, $this->methodName)){
						$this->ctrl->{$this->methodName}();
					}else{
						header("Location:".BASE_URL);
					}
				}
			}
		}


	}

 ?>
