package com.onlineexam.main;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;  
import org.springframework.web.bind.annotation.RestController;

import com.onlineexam.service.UserService;  
@RestController  
public class HelloWorldController   
{  
	@Autowired 

	private UserService userService1;
@RequestMapping("/onlineexam/helloworld")  
public String hello()   
{  
return "Hello javaTpoint";  
} 

@GetMapping("/userDetails1")
public List<com.onlineexam.model.User_details> fetchDepartmentList()
{
    return userService1.fetchUserDetailsList();
}

@RequestMapping("/userDetailsRM1")
public List<com.onlineexam.model.User_details> fetchDepartmentListRM()
{
    return userService1.fetchUserDetailsList();
}


}  
