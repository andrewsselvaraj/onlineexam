package com.onlineexam.main;

import org.springframework.web.bind.annotation.RequestMapping;  
import org.springframework.web.bind.annotation.RestController;  
@RestController  
public class HelloWorldController   
{  
@RequestMapping("/HelloWorld")  
public String hello()   
{  
return "Hello javaTpoint";  
}  
}  
