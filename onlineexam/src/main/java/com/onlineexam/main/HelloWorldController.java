package com.onlineexam.main;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.web.bind.annotation.GetMapping;
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
