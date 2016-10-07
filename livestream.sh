#!/bin/sh
raspivid -o - -co 10 -sa 20 -br 53 -t 0 -w 1920 -h 1080 -fps 30 -vf | cvlc -vvv stream:///dev/stdin --sout '#rtp{sdp=rtsp://:8554/}' :demux=h264
