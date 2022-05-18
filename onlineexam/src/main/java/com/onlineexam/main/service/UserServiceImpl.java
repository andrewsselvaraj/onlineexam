package com.onlineexam.main.service;

import java.util.ArrayList;
import java.util.List;
import java.util.Optional;

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
	@Override
	public Optional<User_details> findByUser_nameAndUser_password(String userName, String password) {
		// TODO Auto-generated method stub
		return userRepository.findById(userName);
		
	}


}
