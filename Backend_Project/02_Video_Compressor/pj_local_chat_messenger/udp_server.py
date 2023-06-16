"""
Local Chat Messenger ver udp (Server)

[本プログラムの説明]
Clientのプログラムからメッセージを送信するとサーバーからメッセージが返答されます。
※サーバーからのメッセージは、Fakerを利用してます。
サーバーは常に動作しているため、強制終了が必要になります。
"""


import os
import socket

from faker import Factory


def is_valid_address(server_address):
    try:
        os.unlink(server_address)
    except FileNotFoundError:
        pass


def udp_server(sock, server_address):
    while True:
        print("\n メッセージの受信を待機中です。")
        data, address = sock.recvfrom(4096)
        
        if data:
            fake = Factory.create()
            response = fake.text(20)
            sent = sock.sendto(response.encode(), address)
            print(f"応答内容: {data}")
        else:
            break


def main():
    sock = socket.socket(socket.AF_UNIX, socket.SOCK_DGRAM)
    server_address = '/udp_socket_file'

    is_valid_address(server_address)

    print('starting up on {}'.format(server_address))
    sock.bind(server_address)
    udp_server(sock, server_address)
    

if __name__ == '__main__':
    main()
