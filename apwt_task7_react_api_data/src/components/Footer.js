import React from "react";
import {
Box,
Container,
Row,
Column,
FooterLink,
Heading,
} from "./FooterStyles";

const Footer = () => {
return (
	<Box>
	<h1 style={{ color: "white",
				textAlign: "center",
				marginTop: "-50px" }}>
		SANOFY
	</h1>
	<Container>
		<Row>
		<Column>
			<Heading>About Us</Heading>
			<FooterLink href="#">Aim</FooterLink>
			<FooterLink href="#">Vision</FooterLink>
			
		</Column>
		<Column>
			<Heading>Services</Heading>
			<FooterLink href="#">Home Delivery</FooterLink>
			<FooterLink href="#">Internships</FooterLink>
		
		</Column>
		<Column>
			<Heading>Contact Us</Heading>
			<FooterLink href="#">Dhanmondi</FooterLink>
			<FooterLink href="#">Banani</FooterLink>
		
		</Column>
		<Column>
			<Heading>Social Media</Heading>
			<FooterLink href="#">
			<i className="fab fa-facebook-f">
				<span style={{ marginLeft: "10px" }}>
				Facebook
				</span>
			</i>
			</FooterLink>
			<FooterLink href="#">
			<i className="fab fa-instagram">
				<span style={{ marginLeft: "10px" }}>
				Instagram
				</span>
			</i>
			</FooterLink>
		</Column>
		</Row>
	</Container>
	</Box>
);
};
export default Footer;
