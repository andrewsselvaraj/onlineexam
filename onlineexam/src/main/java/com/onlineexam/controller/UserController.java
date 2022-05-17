package com.onlineexam.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

import com.onlineexam.model.User_details;

@RestController
public class UserController {

	@Autowired private UserService userService;
	@GetMapping("/userDetails")
    public List<User_details> fetchDepartmentList()
    {
        return userService.fetchUserDetailsList();
    }
	
}
