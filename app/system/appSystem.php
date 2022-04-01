<?php
namespace coding\app\system; 
class AppSystem{
  public Request $request; 
  public Response $response;
  public Router $router;

   function __construct()
  {
    
    $this->request=new Request();
    $this->response=new Response();
    $this->router=new Router($this->request);
      

  } 
  public function start(){
    $this->router->executeRoute();
  }
}
?>