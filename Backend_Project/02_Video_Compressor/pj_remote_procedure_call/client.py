"""
【PJ名】
 Remote Procedure call

【説明】
 Clientのプログラムになります。
 pythonの標準ライブラリ xmlrpc を使用して作成。
 ※学習優先のため、後日ライブラリを使用せずに作る予定。
 
 【注意】
 * Serverプログラムが実行されている状態で本プログラムを実行してください。
 * 本プログラムは強制終了後、コマンド kill -9 PID で全てのプロセスを終了してください。
"""


import xmlrpc.client


server = xmlrpc.client.ServerProxy('http://localhost:9954')

print(f"floorの結果: {server.floor(2.35253)}") # excepted: 2
print(f"nrootの結果: {server.nroot(2, 4)}") # excepted: 16
print(f"reverseの結果: {server.reverse('edcba')}") # excepted: abcde
print(f"srotの結果: {server.sort(['array', 'cut', 'blue', 'due'])}") # excepted: ['array', 'blue', 'cut', 'due']
print(f"valid_anagramの結果: {server.valid_anagram('acd', 'bcd')}") # excepted: False
