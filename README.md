# REST-API Authentication in codeigniter.
# Library

This Codeigniter library is useful for authenticate to your API.

Download this repository.

# Steps

1. Navigate to <code>application/libraries</code> and place <code>Access.php</code> file into your project's <code>application/libraries</code> folder. 
2. Navigate to <code>applicatin/core</code> and place <code>AUTH_Controller.php</code> file to your project's <code>application/core</code> folder.
3. Now just create a controller in <code>application/controller</code> that extends <code>AUTH_Controller</code>

Write the code like below:
<code>
    class Api extends AUTH_Controller {
        public function __construct(){
            parent::__construct();
        }

        public function index(){
           // Your method code here.
        }
        
    }
</code>

# Example
Example API is in <code>application/controller/Api.php</code>