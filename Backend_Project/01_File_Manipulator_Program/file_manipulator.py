"""
File Manipulator Program

[本プログラムの説明]
引数という形で入力を受け取り、それらの引数に基づいて特定の操作を実行することになります。
このプログラムは、コマンドラインインターフェースから実行されます。

下記、コマンドのように入力をして実行します。
例：python3 file_manipulator.py reverse python_practice/data/test.txt python_practice/dump/test-dumb.txt 

編集できる内容は、reverse/copy/duplicate/replaceになります。
詳細は、各関数のコメントに記載してます。
"""

import shutil
import sys


"""
引数：inputpath=編集対象のPath, outputpath=編集後の出力先のPath
説明：inputpath にあるファイルを受け取り、outputpath に inputpath の内容を逆にした新しいファイルを作成します。
"""
def reverse_line(input_path, output_path):
    with open(input_path, "r") as input_f:
        contents = input_f.readlines()

    with open(output_path, 'w') as out_f:
        for line in contents:
            out_f.writelines(line[::-1])


"""
引数：inputpath=コピー元のPath,　outputpath=コピー出力後のPath
説明：inputpath にあるファイルのコピーを作成し、outputpath として保存します。
"""
def copy_file(input_path, output_paht):
    shutil.copy(input_path, output_paht)


"""
引数：inputpath=指定ファイルのPath, n=実行回数
説明：inputpath にあるファイルの内容を読み込み、その内容を複製し、複製された内容を inputpath に n 回複製します。
"""
def duplicate_contents(input_path, n):
    contents = ""

    with open(input_path, "r") as f:
        contents = f.readlines()

    with open(input_path, 'a') as f:
        for i in range(int(n)):
            for line in contents:
                f.writelines(line)


"""
引数：inputpath=指定ファイルのPath, needle=置換対象の文字列, newstring=置換後の文字列
説明：inputpath' にあるファイルの内容から文字列 'needle' を検索し、'needle' の全てを 'newstring' に置き換えます。
"""
def replace_string(input_path, needle, new_str):
    contents = ""

    with open(input_path, "r") as f:
        contents = f.readlines()

    with open(input_path, 'w') as f:
        for line in contents:
            replace_text = line.replace(needle, new_str)
            f.writelines(replace_text)


print("fileを操作するプログラムです。")
if sys.argv[1] == "reverse":
    reverse_line(sys.argv[2], sys.argv[3])
elif sys.argv[1] == "copy": 
    copy_file(sys.argv[2], sys.argv[3])
elif sys.argv[1] == "duplicate": 
    duplicate_contents(sys.argv[2], sys.argv[3])
elif sys.argv[1] == "replace": 
    replace_string(sys.argv[2], sys.argv[3], sys.argv[4])
