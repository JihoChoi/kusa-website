# Purdue Korean Undergraduate Student Association Website Source Code

<center><img src = "KUSA_Logo.png" style = "width:350px; height:auto;"></center>

## Introduction

This is a web application to manage Korean Undergraduate Student Association's users and members.

## Description

### Todo

#### Front-end

 ''*'' Currently working on

- [ ] Video not appear in safari problem
- [ ] Tinymce
  - [x] Tinymce default setup
  - [ ] Multiple image uploads
- [ ] Complete main page (index.php)
- [ ] Complete other pages
  - [ ] About
    - [ ] KUSA
    - [ ] Board
  - [ ] Updates
    - [ ] Announcements
    - [ ] Events
    - [ ] Calendar
  - [ ] Resources
- [x] Email verification re-design
- [ ] Complete Dashboard
  - [ ] Dashboard main-page
    - [x] Show list of posts
    - [x] Show list of users in simple number
    - [ ] Show total messages
  - [ ] Users: Users Pagination*

#### Back-end

- [ ] Password reset
- [x] Send email verification after submit register
- [ ] Dashboard
  - [x] Dashboard access filter
  - [ ] Users: after edit or delete, redirect back to exactly where it was.*
  - [ ] Posts controller
    - [ ] CRUD
      - [ ] View: Link to page
      - [x] Post
      - [ ] Edit
      - [ ] Delete
    - [x] Manage Event Categories
    - [x] Manage KUSA Teams
    - [x] Manage KUSA Member Roles
- [ ] REST API routes
- [ ] PUSH NOTIFICATION
- [ ] Private Message

### Database 'user_status' variable description

- member: current active KUSA member
- nolonger: no longer active KUSA member
- general: registered general user
- admin: admin
- invalid: user that is not verified via email
- blocked: blocked

## License

MIT License

Copyright (c) 2016 Dongyu Kang

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
