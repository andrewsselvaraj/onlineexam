package com.onlineexam.main.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
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
	
}
