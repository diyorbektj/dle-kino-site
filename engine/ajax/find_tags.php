<?php
/*
=====================================================
 DataLife Engine - by SoftNews Media Group 
-----------------------------------------------------
 https://dle-news.ru/
-----------------------------------------------------
 Copyright (c) 2004,2023 SoftNews Media Group
-----------------------------------------------------
 You use Demo Version of DataLife Engine
=====================================================
*/
?><?php $_F=__FILE__;$_X='P0ptP3FGcTlnKjl3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3dzkKNVo2WnBNLzcKamRvTWQ3Ci0KeUkKbHYvNjQ3XUIKVDdmTVoKRFN2aHEKOS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tOQpGNjZxQjpnZ2ZYNy1kN11Ce1NoZzktLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLTkKVnZxSVNNb0Y2CigyKQp9QUFSLX1BfUgKbHYvNjQ3XUIKVDdmTVoKRFN2aHE5d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3c5Ck5GTUIKMnZmNwpNQgpxU3Y2NzI2N2YKeUkKMnZxSVNNb0Y2OXd3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3OQpjTVg3OgovTWRmXzZab0J7cUZxOXd3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3OSpnOTlNLyghZjcvTWQ3ZignNWFOYXB0Y2pqNER0NGonKSkKMTkJRjdaZjdTKAoibk5OLmc+ez4KUkFICmN2U3lNZmY3ZCIKKTs5CUY3WmY3UwooCidwdjJaNk12ZDoKe3tne3tnJwopOzkJZk03KAoibloyPE1kbwpaNjY3T3E2ISIKKTs5MDk5TS8oCiRfTGpyOGpsTiAnaEI3U19GWkJGJ3MKd3cKIiIKUEwKJF9ManI4amxOICdoQjdTX0ZaQkYncwohdwokZlg3X1h2b01kX0ZaQkYKKQoxOQlmTTcoCiI3U1N2UyIKKTs5MDk5TS8oCiFNQkI3NigkX0RqTiAnNjdTTydzKQopCmZNNygiIHMiKTs5OU0vKAohJF9Eak4gJzY3U08ncwopCmZNNygiIHMiKTs5OU0vCigkX0RqTiAnT3ZmNydzCnd3CiJoQjdTQiIpCjE5OQlNLygKISRoQjdTX29TdmhxICRPN095N1NfTWYgJ2hCN1Nfb1N2aHEnc3MgJ1pYWHZdX1pmZjIncwpQTAohJDJ2ZC9NbyAnWlhYdl1fMnZPTzdkNkIncykKZk03KCIgcyIpOzk5CSR5aC8vN1MKdwpaU1NaSSgpOzkJJHloLy83UyAnL3ZoZGYncwp3Ci9aWEI3Ozk5CSRCN1pTMkZfZFpPNwp3CiRmeS1KQlovN0J6WCg2U01PKEY2T1hCcTcyTVpYMkZaU0IoQjZTTXFfNlpvQigkX0RqTiAnNjdTTydzKSwKajROX3I4UE5qbCwKJDJ2ZC9NbyAnMkZaU0I3NidzKSkpOzk5CSRmeS1Kemg3U0koImxqcGpWTgoqCmNMUFQKIgp7CjhsakwuTGpjdFcKewoiX2hCN1NCCnhuakxqCmRaTzcKcHRDagonMSRCN1pTMkZfZFpPNzAlJwpQTDVqTAplUQpYWkI2Zlo2Nwo1amxWCnB0VHROCj5BIik7OQk5CV1GTVg3CigkU3ZdCncKJGZ5LUpvNzZfU3ZdKCkpCjE5CQkkeWgvLzdTICcvdmhkZidzCncKNlNoNzs5OQkJTS8KKCQydmQvTW8gJ1pYWHZdX1pYNl9oU1gncykKMTk5CQkJJG92X3FabzcKdwokMnZkL01vICdGNjZxX0Z2TzdfaFNYJ3MKewoiaEI3U2ciCnsKaFNYN2QydmY3KCRTdl0gJ2RaTzcncykKewoiZyI7OQkJMAo3WEI3CjE5OQkJCSRvdl9xWm83CncKIiQubi5fbGpwYz9CaHlaMjZNdmR3aEI3U01kL3YmWk9xO2hCN1N3Igp7CmhTWDdkMnZmNygkU3ZdICdkWk83J3MpOzkJCTA5OTkJCSQ9WlhoNwp3CiJtQnFaZAoyWFpCQndcIjJ2T083ZDZCLWhCN1MtcVN2L01YNwpkdmQydmQ2N2Q2N2ZNNlp5WDdcIgpmWjZaLWhCN1NkWk83d1wiIntoU1g3ZDJ2ZjcoJFN2XSAnZFpPNydzKXsiXCIKZlo2Wi1oQjdTaFNYd1wiMSRvdl9xWm83MFwiSkAxJFN2XSAnZFpPNydzMG1nQnFaZEoKIjs5OQkJTS8KKDJ2aGQ2KDdbcVh2ZjcoIkAiLAokU3ZdICcvdjZ2J3MpKQp3dwp9KQoxOTkJCQkkWj1aNlpTCncKJ0Y2NnFCOmdnXV1de29TWj1aNlpTezJ2T2daPVo2WlNnJwp7Ck9maSg2U01PKCRTdl0gJy92NnYncykpCnsKJz9CdycKewpNZDY9WlgoJGhCN1Nfb1N2aHEgJFN2XSAnaEI3U19vU3ZocSdzcyAnT1pbXy92NnYncyk7OTkJCTAKN1hCNwoxOTkJCQlNLwooJFN2XSAnL3Y2didzKQoxOTkJCQkJTS8KKEI2U3F2QigkU3ZdICcvdjZ2J3MsCiJnZyIpCnd3dwpBKQokWj1aNlpTCncKIkY2NnFCOiIKewokU3ZdICcvdjZ2J3M7OQkJCQk3WEI3CiRaPVo2WlMKdwokU3ZdICcvdjZ2J3M7OTkJCQkJJFo9WjZaUwp3CkBxWlNCN19oU1goJFo9WjZaUyk7OTkJCQkJTS8KKCRaPVo2WlMgJ0Z2QjYncykKMTkJCQkJCSRaPVo2WlMKdwokU3ZdICcvdjZ2J3M7OQkJCQkwCjdYQjcKJFo9WjZaUwp3CiQydmQvTW8gJ0Y2NnFfRnZPN19oU1gncwp7CiJocVh2WmZCZy92NnZCZyIKewokU3ZdICcvdjZ2J3M7OTkJCQkwCjdYQjcKJFo9WjZaUwp3CiQydmQvTW8gJ0Y2NnFfRnZPN19oU1gnc3siNjdPcVhaNjdCZyJ7CiQydmQvTW8gJ0I8TWQnc3siZ2ZYN01PWm83Qmdkdlo9WjZaU3txZG8iOzk5CQkwOTkJCSRaPVo2WlMKdwoibU1PbwpCUzJ3XCIxJFo9WjZaUzBcIkoiOzk5CQkkeWgvLzdTICdNNjdPQidzIHMKdwpaU1NaSSg5CQkJJzZJcTcnCndKCiJaaDZ2MnZPcVg3NjdNNjdPIiw5CQkJJzY3WzYnCndKCiRTdl0gJ2RaTzcncyw5CQkJJz1aWGg3Jwp3SgokPVpYaDcsOQkJCSdNMnZkJwp3SgokWj1aNlpTOQkJKTs5OQkwOTkJNzJGdgpVQnZkXzdkMnZmNygkeWgvLzdTLApHbFA0Xzg0amxWYS5qNV84NHRWUDVqCnwKR2xQNF84NGpsVmEuajVfbHBhbG5qbCk7OQlmTTcoKTs5OTkwCjdYQjcKMTk5CSR5aC8vN1MKdwoiIHMiOzk5CSQ2Wm9CCncKWlNTWkkoKTs5OQlNLwooJF9Eak4gJ092Zjcncwp3dwoiWy9NN1hmIikKMTk5CQkkNjdTTwp3CmZYN19CNlM2dlh2XTdTKEY2T1hCcTcyTVpYMkZaU0IoQjZTTXFfNlpvQihCNlNNcUJYWkJGN0IoNlNNTyhTWl1oU1hmNzJ2ZjcoJF9Eak4gJzY3U08ncykpKSksCmo0Tl9yOFBOamwsCiQydmQvTW8gJzJGWlNCNzYncyksCiQydmQvTW8gJzJGWlNCNzYncyk7OQkJJDY3U08KdwokZnktSkJaLzdCelgoQjZTX1M3cVhaMjcoWlNTWkkoIjEiLAoiICIsCiI6IiwKIiZaT3E7L1NaQlg7IiksClpTU1pJKCImIz59SDsiLAoiJiNrPjsiLAoiJiNpSzsiLAoiZyIpLAokNjdTTykpOzk5CQkkZnktSnpoN1NJKCJsanBqVk4KNlpvPVpYaDcKWkIKNlpvLApWUDg0TigqKQphbAoydmhkNgpjTFBUCiIKewouTGpjdFcKewoiX1svQjdaUzJGCnhuakxqCnBQeGpMKGA2Wm89WlhoN2ApClhNPDcKJzEkNjdTTzAlJwpETFA4LgplUQo2Wm89WlhoNwpQTDVqTAp5SQoydmhkNgo1amxWCnB0VHROCj5pIik7OQkwCjdYQjcKMTk5CQlNLwoocVM3b19PWjYyRigiZyBcfHxcbXxcSnNnIiwKJF9Eak4gJzY3U08ncykpCiQ2N1NPCncKIiI7OQkJN1hCNwokNjdTTwp3CiRmeS1KQlovN0J6WChmWDdfQjZTNnZYdl03UyhGNk9YQnE3Mk1aWDJGWlNCKEI2U01xXzZab0IoQjZTTXFCWFpCRjdCKDZTTU8oU1pdaFNYZjcydmY3KCRfRGpOICc2N1NPJ3MpKSkpLApqNE5fVlBULmFOLAokMnZkL01vICcyRlpTQjc2J3MpLAokMnZkL01vICcyRlpTQjc2J3MpKTs5OQkJTS8KKCEkNjdTTykKZk03KCIgcyIpOzk5CQkkZnktSnpoN1NJKCJsanBqVk4KNlpvLApWUDg0TigqKQphbAoydmhkNgpjTFBUCiIKewouTGpjdFcKewoiXzZab0IKeG5qTGoKcFB4akwoYDZab2ApClhNPDcKJzEkNjdTTzAlJwpETFA4LgplUQo2Wm8KUEw1akwKeUkKMnZoZDYKNWpsVgpwdFR0Tgo+aSIpOzkJMDk5CV1GTVg3CigkU3ZdCncKJGZ5LUpvNzZfU3ZdKCkpCjE5OQkJJFN2XSAnNlpvJ3MKdwpGNk9YXzdkNk02SV9mNzJ2ZjcoJFN2XSAnNlpvJ3MsCmo0Tl9yOFBOamwKfApqNE5fV1RwPiwKJzhOYy1LJyk7OQkJJFN2XSAnNlpvJ3MKdwpCNlNfUzdxWFoyNygnIicsCidcIicsCiRTdl0gJzZabydzKTs5OTkJCSQ2Wm9CIHMKdwokU3ZdICc2Wm8nczs5CTA5OQlNLwooMnZoZDYoJDZab0IpKQokeWgvLzdTCncKIiBcIiIKewpNT3FYdmY3KCJcIixcIiIsCiQ2Wm9CKQp7CiJcInMiOzk5CTcyRnYKJHloLy83Uzs5MDk5P0o=';$_D=strrev('edoced_46esab');eval($_D('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCd2TEhFbGUwN2FzaGdQTnddLm5PMlpCdUc5QXlqSVMzVjhxMXtZSwptPkQ2bz1DV3RYaWtyUXogTWJmUltkPC81RlVUcEpjeDR9Jywnb1IzelNCfWVBXXUvT1Q9d1BIbWNhczZKCjBiRXlyN0NVcHsuWjggPDFHdGd2S1hJbDU5UVlxW2lWZDR4bmtmRGhqTUw+RldOMicpOyRfUj1zdHJfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>