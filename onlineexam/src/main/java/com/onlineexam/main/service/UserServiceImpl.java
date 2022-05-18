package com.onlineexam.main.service;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.onlineexam.main.model.User_details;
import com.onlineexam.main.repository.UserRepository;
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

}
