package com.onlineexam.main.controller;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.onlineexam.main.model.User_details;
import com.onlineexam.main.service.UserService;

@RestController
public class UserController {

	@Autowired 
	private com.onlineexam.main.service.UserService userService;
	

	@GetMapping("/userDetails")
    public List<User_details> fetchDepartmentList()
    {
        return userService.fetchUserDetailsList();
    }
    
	@RequestMapping(value = "/userInfo", method =  RequestMethod.GET)
    public Optional<User_details> findByUserNameandPassword(@RequestParam("userName") String userName,@RequestParam("password") String password)
    {
        return userService.findByUser_nameAndUser_password(userName, password);
    }
    
	@RequestMapping(value = "/login", method =  RequestMethod.POST)
    public Optional<User_details> login(@RequestParam("userName") String userName,@RequestParam("password") String password)
    {
        return userService.findByUser_nameAndUser_password(userName, password);
    }
	
}
