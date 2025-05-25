# -*- coding: utf-8 -*-
import sys
import io

# 明示的に stdout をUTF-8に設定
sys.stdout = io.TextIOWrapper(sys.stdout.buffer, encoding='utf-8')

print("平賀 翔貴 のポートフォリオ")