<!--
Instructor notes: Internet simulation:

- Arrange classroom into clusters of 2 or 3 desks
- Each cluster has a number (a random number between 10-99, with no meaning), and then each desk in a cluster has a number. put these together to form an IP address (eg 77.1 means cluster 77, desk 1)
- Make an excel sheet that we can use to randomly map sender to receiver
- Draw a picture, tear it into 4 pieces, put the address each piece, and send them into the internet. Pass them aimlessly until they reach the destination
- Build routing tables
    - First, ping nearby tables. Tables should respond to ping with their own table number
    - Then, build out the whole routing table by sending "neighbors" requests. When a table receives a "neighbors" request, it should respond with its immediate neighbors.
    - Each table should continue sending "neighbors" requests until it has mapped the entire network. The goal of the routing table should be to look up the destination and find the next hop
- Solve congestion by passing tokens:
    - Each table has a rubber duck that they share and pass around
    - When you have the duck, you may: receive one packet from another group and send one of your own packets to another group, then pass the duck to your neighbor.

-->

## Lesson Objectives
By the end of this lesson, you should:

- Understand the role of packets in networked communication
- Understand the role that routers play on the network
- Understand some of the problems that can occur in packet-switched networks
- Know some of the information that is contained in the TCP/IP header

### Today's Vocabulary
- Protocol
- Packet
- Header
- Payload
- Router
- Routing Table

## What We'll Do In Class

### No Reading Quiz

### Internet Simulation
We'll spend most of the class working through an internet simulation. The simulation will helps us develop a better understanding of how protocols enable communication
on the internet.

### Notes
When we finish the simulation, write an HTML page with some notes about what
we learned in class. You should call this page `practice/network_notes.html`, 
and this will count as today's classwork assignment.

In your HTML page:
- Define each of the words in the "Today's Vocabulary" 
space above
- Summarize each of the problems we discussed that can occur on a packet-switched
network
- Explain the protocols that we came up with in class, and how each helped ensure
proper communication

Feel free to use whatever HTML tags you think are most semantic and appropriate.

(We'll continue making notes like this as we learn more about the internet this 
unit. Next time, I'll show you an easier way to write these pages)

## Homework

### Reading
Please complete the below reading assignment, and prepare for a short, simple 
reading quiz at the beginning of next class.

### Read about the TCP/IP model

There are two things that I want you to read for next class.

- First, watch [This YouTube video](https://www.youtube.com/watch?v=AYdF7b3nMto&list=PLzdnOPI1iJNfMRZm5DDxco3UdsFegvuB7). This is a nice recap
of the network concepts that we introduced today. If we have time,
we might watch this together in class.
- Read Chapter 2 of [This online textbook](https://do1.dr-chuck.net/net-intro/EN_us/net-intro.pdf). Specifically, I want you to understand the TCP/IP model, each of the four layers in the model, and the role that each plays. 

If you're interested and curious, feel free to skim Chapter 1 in that book 
(it mostly covers concepts we've already talked about) or to watch other videos 
in that YouTube playlist - they're all great!