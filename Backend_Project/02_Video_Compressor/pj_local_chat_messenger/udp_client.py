"""
Local Chat Messenger ver udp (Client)

[本プログラムの説明]
Clientのプログラムからメッセージを送信するとサーバーからメッセージが返答されます。
※サーバーからのメッセージは、Fakerを利用してます。
「exit」と入力するとClient側のプログラムを終了できます。
"""


import os
import socket


def is_valid_address(server_address):
    try:
        os.unlink(server_address)
    except FileNotFoundError:
        pass


def udp_client(sock, server_address):
    try:

        while True:
            message = input("メッセージを入力してください: ")
            if "exit" == message: break

            print(f"送信内容: {message!r}")
            sent = sock.sendto(message.encode(), server_address)

            print("受信待機中")
            data, server = sock.recvfrom(4096)
            print(f"受信内容: {data!r}")

    finally:
        print("通信を終了します。")
        sock.close()


def main():
    sock = socket.socket(socket.AF_UNIX, socket.SOCK_DGRAM)

    server_address = '/udp_socket_file'
    address = '/udp_client_socket_file'

    is_valid_address(address)
    sock.bind(address)

    udp_client(sock, server_address)


if __name__ == '__main__':
    main()
