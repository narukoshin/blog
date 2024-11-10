#!/usr/bin/env python3
import requests
import sys

url = sys.argv[1]

if __name__ == '__main__':
    try:
        r = requests.get(url, timeout=3)
        print(r.status_code)
    except Exception as e:
        print(e)