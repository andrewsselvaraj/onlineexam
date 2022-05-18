package com.onlineexam.main.service;

import java.util.ArrayList;
import java.util.Date;
import java.util.HashMap;
import java.util.List;
import java.util.Optional;
import java.util.UUID;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.onlineexam.main.model.User_details;
import com.onlineexam.main.repository.UserRepository;

import io.jsonwebtoken.Jwts;
@Service
public class UserServiceImpl implements UserService{

	@Autowired
    private UserRepository userRepository;
	@Override
	public List<User_details> fetchUserDetailsList() {
		// TODO Auto-generated method stub
		//return userRepository.findAll();\
		User_details us = new User_details();
		ArrayList<User_details> al = new ArrayList<User_details>();
		al.add(us);
		//return al;
		return userRepository.findAll();
	}
	@Override
	public HashMap<String,String> getTokenAfterLogin(String userName,String password)
	
	{
		HashMap<String,String> hm= new HashMap<String,String>();
		// TODO Auto-generated method stub
		long millis = System.currentTimeMillis();  
		Date startDate = new Date(millis);
		
		Date endDate = new Date(millis+10000);
		User_details x= userRepository.getById(userName);
		

		        String jwtToken = Jwts.builder()
				        .claim("name",x.getUser_id())
				        .claim("email", x.getUser_email())
				        .setSubject(x.getUser_role())
				        .setId(UUID.randomUUID().toString())
				        
				        .setIssuedAt(startDate)
				        .setExpiration(endDate)
				        .compact();
		        hm.put("name", x.getUser_id());
		        hm.put("email", x.getUser_role());
		        hm.put("token", jwtToken);
		        return hm;
		
	}
	@Override
	public User_details findByUser_nameAndUser_password(String userName, String password) {
		// TODO Auto-generated method stub
		return  userRepository.getById(userName);
	}


}
