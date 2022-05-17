package com.onlineexam.main;

import java.util.UUID;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

import io.jsonwebtoken.Jwts;
import io.jsonwebtoken.SignatureAlgorithm;

import java.time.Instant;
import java.time.temporal.ChronoUnit;
import java.time.temporal.Temporal;
import java.util.Date;
import java.util.UUID;
@SpringBootApplication
public class OnlineexamApplication {

	public static void main(String[] args) {
		
		SpringApplication.run(OnlineexamApplication.class, args);
		long millis = System.currentTimeMillis();  
		Date startDate = new Date(millis);
		
		Date endDate = new Date(millis+10000);
		/*String jwtToken = Jwts.builder()
		        .claim("name", "Jane Doe")
		        .claim("email", "jane@example.com")
		        .setSubject("jane")
		        .setId(UUID.randomUUID().toString())
		     
		        .setIssuedAt(startDate)
		        .setExpiration(endDate)
		        .compact();
		*/
		/*final Date createdDate = new Date();
		  final Date expirationDate = new Date(createdDate.getTime() +  1000);
		  String jwtToken= Jwts.builder()
				  .claim("name", "Jane Doe")
			        .claim("email", "jane@example.com")
		      .setSubject("andrewas subeject")
		      .setIssuedAt(createdDate)
		      .setExpiration(expirationDate)
		      .compact();
		     */
		
		 String jwtToken = Jwts.builder().claim("name", "Jane Doe")
		        .claim("email", "jane@example.com").setSubject("ANDREW SUBJECT").setIssuedAt(new Date(System.currentTimeMillis()))
				.setExpiration(new Date(System.currentTimeMillis() + 180000)).signWith(SignatureAlgorithm.HS512, "javainuse").compact();
	
		System.out.println("\n"+jwtToken);
		
	}

}
