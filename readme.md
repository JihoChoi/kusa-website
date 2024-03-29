# Purdue Korean Undergraduate Student Association Website Source Code

## Introduction

This is a web application to manage Korean Undergraduate Student Association's users and members.

[![forthebadge](http://forthebadge.com/images/badges/built-with-swag.svg)](http://forthebadge.com)
[![StyleCI](https://styleci.io/repos/75806015/shield?branch=master)](https://styleci.io/repos/75806015)

## Description

### Todo

#### Front-end

- [ ] Video not appear in safari problem
- [x] Tinymce
  - [x] Tinymce default setup
- [ ] Complete main page (index.php)
- [ ] Complete other pages
  - [ ] About
    - [ ] KUSA
    - [x] Board
  - [ ] Updates
    - [x] Announcements
    - [x] Events
    - [ ] Calendar
  - [ ] Resources
- [ ] Email verification re-design
- [ ] Complete Dashboard
  - [ ] Dashboard main-page
    - [x] Show list of posts
    - [x] Show list of users in simple number
    - [ ] Show total messages
      - [ ] Use of broadcast
  - [x] Users: Users Pagination

#### Back-end

- [ ] Password reset
- [x] Send email verification after submit register
- [ ] Dashboard
  - [x] Dashboard access filter
  - [ ] Posts controller
    - [ ] CRUD
      - [x] View: Link to page
      - [x] Post
      - [ ] Edit
      - [ ] Delete
    - [x] Manage Event Categories
    - [x] Manage KUSA Teams
    - [x] Manage KUSA Member Roles
- [ ] REST API routes
- [ ] PUSH NOTIFICATION
- [ ] Private Message

### REST API endpoints

- '/api/v1/posts'
- '/api/v1/post/{id}'
- '/api/v1/event_categories'
- '/api/v1/event_category/{id}'
- '/api/v1/teams'
- '/api/v1/team/{id}'
- '/api/v1/members'

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
