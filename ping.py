#!/usr/bin/env python3
import requests
import sys

url = sys.argv[1]

if __name__ == '__main__':
    headers = {
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36',
        'Accept-Encoding': 'gzip, deflate, br',
        'Accept-Language': 'en-US,en;q=0.9',
        'Connection': 'keep-alive'
    }

    try:
        r = requests.get(url, timeout=3, headers=headers)
        print(r.status_code)
    except Exception as e:
        print(e)