package com.onlineexam.main.controller;

import java.util.HashMap;
import java.util.List;

import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServletResponse;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.onlineexam.main.model.User_details;
import com.onlineexam.main.repository.UserRepository;

@RestController
public class UserController {
	
	@Autowired
	private UserRepository userrepository;

	@Autowired 
	private com.onlineexam.main.service.UserService userService;
	

	@GetMapping("/userDetails")
    public List<User_details> fetchDepartmentList()
    {
        return userService.fetchUserDetailsList();
    }
    
    @GetMapping("/userAllDetails")
    public List<User_details> fetchCompleteDepartmentList()
    {
        return userService.fetchAllUserDetailsList();
    }
    
    
    @RequestMapping(value = "/userid", method =  RequestMethod.GET)
    public User_details findByUserid(@RequestParam("userid") String userid)
    {
        //return userService.findByUser_nameAndUser_password(userName, password);
    	
    	return userrepository.findByUser_id(userid);
    }
    
    
	@RequestMapping(value = "/userInfo", method =  RequestMethod.GET)
    public User_details findByUserNameandPassword(@RequestParam("userName") String userName,@RequestParam("password") String password)
    {
        return userService.findByUser_nameAndUser_password(userName, password);
    }
    
	@RequestMapping(value = "/login", method =  RequestMethod.GET)
    public HashMap<String, String> login(HttpServletResponse response,@RequestParam("userName") String userName,@RequestParam("password") String password)
    {
		
		HashMap<String, String> hm = userService.getTokenAfterLogin(userName, password);
		Cookie cookie = new Cookie("name", hm.get("name"));
		response.addCookie(cookie);
		
		Cookie cookie1 = new Cookie("email", hm.get("email"));
		response.addCookie(cookie1);
		
		Cookie cookie2 = new Cookie("token", hm.get("token"));
		response.addCookie(cookie2);

        
        return hm;
       
    }
	
}
