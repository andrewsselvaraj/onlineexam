package com.onlineexam.main;

import org.springframework.web.bind.annotation.RequestMapping;  
import org.springframework.web.bind.annotation.RestController;  
@RestController  
public class HelloWorldController   
{  
@RequestMapping("/onlineexam/helloworld")  
public String hello()   
{  
return "Hello javaTpoint";  
}  
}  
