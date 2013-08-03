<?php
	class Ssh {
	    
	    public static $object;
        
        public static function create() {
            if (self::$object === null) {
                self::$object = new self();
            }
            
            return self::$object;
        }
        
			$this->request = Request::create();

				$this->connected = true;
			} else {
				$this->connected = false;
			}
			if(
				$this->connected and
				ssh2_auth_password($this->connection, SSH_USER, SSH_PASS)
			) {
			} else {

		public function getResponse($command) {
		 	if (!$stream = ssh2_exec($this->connection, $command )){
            	echo "fail: unable to execute command\n";
        	} else{
            	$data = "";
    			while( $buf = fread($stream,4096) ){
                	$data .= $buf;
            	}
       			fclose($stream);
       		}

       		return $data;

		public function sshExec($command) {
			}

			ssh2_exec($this->connection, $command);

		public function isConnected() {

		public function getWgetCommand() {
			$data = $this->getResponse("uname -a");

        	if (strpos($data, "freebsd") > 1) {
         		return "fetch";
        	} else {
          		return "wget";
        	}
		}
        
        public function checkEzstreamCompatibility() {
            $data = $this->getResponse("ezstream -V");

            if (strpos($data, "radiocms") > 1) {
                return true;
            } else {
                return false;
            }
        }
        
        public function noFirstTrack() {
            $data = $this->getResponse("ezstream -V");

            if (strpos($data, "--no-first-track") > 1) {
                return true;
            } else {
                return false;
            }
        }
?>