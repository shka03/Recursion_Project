"""
Local Chat Messenger ver tcp/ip (Client)

[本プログラムの説明]
Clientのプログラムからメッセージを送信するとサーバーからメッセージが返答されます。
※サーバーからのメッセージは、Fakerを利用してます。
「exit」と入力するとClient側のプログラムを終了できます。
"""


import socket
import sys


def sock_connect(sock, server_address):
    try:
        sock.connect(server_address)
    except socket.error as err:
        print(err)
        sys.exit(1)


def sock_send_message(sock):
    try:
        try:
            sock.settimeout(10)
            while True:
                meessage = input("メッセージを入力してください: ")
                if 'exit' == meessage: break
                sock.sendall(meessage.encode())

                data = sock.recv(32)
                if data:
                    print("サーバーからの応答内容: " + data.decode())
                else:
                    break
        except (TimeoutError):
            print("通信時間の設定時間を超えました。サーバーの接続を終了します。")

    finally:
        print("通信を終了しました。")
        sock.close()


def tcp_client(sock, server_address):
    sock_connect(sock, server_address)
    sock_send_message(sock)
    

def main():
    sock = socket.socket(socket.AF_UNIX, socket.SOCK_STREAM)

    server_address = '/socket_file'
    print(f'{server_address} に接続します。')

    tcp_client(sock, server_address)


if __name__ == "__main__":
    main()
