import random


def judge_number(n, m):

    for i in range(n):
        hit_num = random.randint(n,m)
        usre_num = int(input('入力した最小値と最大値の範囲から、予想する数値を入力してください。'))

        if hit_num == usre_num: return '予想した整数が一致しました。正解です！'

    return '回数を超えました。残念、外れです・・・'


# 最小数（n）と最大数（m）
print('Guess the number gameです。最大値内の回答回数でプログラムから生成される整数を予想してください。')
n = int(input('最小値を入力してください。'))
m = int(input('最大値を入力してください。'))

while(n > m):
    print('最小値が最大値を超えています。最小値は最大値を超えない整数を入力してください。')
    n = int(input('最小値を入力してください。'))
    m = int(input('最大値を入力してください。'))

print(judge_number(n,m))
