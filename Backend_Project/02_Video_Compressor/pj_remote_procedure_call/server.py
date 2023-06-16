"""
【PJ名】
 Remote Procedure call

【説明】
 Serverのプログラムになります。
 pythonの標準ライブラリ xmlrpc を使用して作成。
 ※学習優先のため、後日ライブラリを使用せずに作る予定。
 
 【注意】
 本プログラムは強制終了後、コマンド kill -9 PID で全てのプロセスを終了してください。
"""


import math
import xmlrpc.server


def floor(x:float) -> float:
    return math.floor(x)


def nroot(num:int, x:int) -> int:
    return math.pow(x, num)


def reverse(s:str) -> str:
    return s[::-1]


def sort(str_arr:list) -> list:
    if type(str_arr) is not list: return ["文字列の配列でないため処理は失敗です。"]

    is_str_arr = all(isinstance(item, str) for item in str_arr)
    if not is_str_arr: return ["文字列の配列でないため処理は失敗です。"]

    return sorted(str_arr)


def valid_anagram(first:str, second:str) -> bool:
    return sorted(first) == sorted(second)


server = xmlrpc.server.SimpleXMLRPCServer(('localhost', 9954))

server.register_function(floor, "floor")
server.register_function(nroot, "nroot")
server.register_function(reverse, "reverse")
server.register_function(sort, "sort")
server.register_function(valid_anagram, "valid_anagram")

server.serve_forever()
