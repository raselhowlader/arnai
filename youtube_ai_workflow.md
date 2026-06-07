# YouTube AI Automation Architecture

## Hosting

### cPanel Hosting
- PHP Dashboard
- MySQL Database
- User Login
- Analytics
- Settings

### Separate n8n Server
- Cron (9 AM Daily)
- Claude AI
- ElevenLabs
- Video Generation
- YouTube Upload

## Workflow

09:00 AM Daily
    ↓
n8n Cron Trigger
    ↓
Search Trending Topics
    ↓
Generate Video Idea (Claude AI)
    ↓
Generate Script (Claude AI)
    ↓
Generate Voice (ElevenLabs)
    ↓
Create Video
    ↓
Upload to YouTube
    ↓
Send Results to PHP Dashboard Webhook
    ↓
Store in MySQL
    ↓
Display in Dashboard

## PHP → n8n

POST /start-workflow

## n8n → PHP

POST /api/save-video.php

Data:
- Title
- Script
- Video URL
- Upload Status
- Views
- Published Date

## Dashboard Pages

- Dashboard
- Trending Topics
- Content Ideas
- Scripts
- Videos
- Analytics
- Settings

## Notes About Uploaded HTML

Convert all direct YouTube API calls to PHP API endpoints.
Store API keys on server, not in browser.
Connect dashboard to n8n using webhooks.
