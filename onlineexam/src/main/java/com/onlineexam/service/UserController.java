package com.onlineexam.service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class UserController {

	@Autowired private UserService userService;
	@GetMapping("/userDetails")
    public List<com.onlineexam.model.UserInformation> fetchDepartmentList()
    {
        return null;
    }
	
}
