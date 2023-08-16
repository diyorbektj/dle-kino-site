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
?><?php $_F=__FILE__;$_X='P3lUP2NEY0Y2KkZMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTEYKcXIyclhIM24KeFI3SFJuCi0KXWwKWWIzMlNuNDkKfW56SHIKTTViQmMKRi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tRgpEMjJjOTo2Nnpnbi1SbjQ5TjVCNkYtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLUYKUGJjbDVIN0QyCihPKQpwPT12LXA9cC8KWWIzMlNuNDkKfW56SHIKTTViQmNGTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExGCi5ESDkKT2J6bgpIOQpjNWIybk8ybnoKXWwKT2JjbDVIN0QyRkxMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMRgpKSGduOgo1OTlOY0RjRi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tRgpmOW46CjJEbgpSbjQ5CjNubno5RkxMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMRio2RkZIMygKIXpuM0hSbnooCidxSS5JWGpKeHhTTWpTeCcKKQopCiBGCURucnpuNSgKIkUuLjg2V05XCnY9LwpKYjVdSHp6blIiCik7RglEbnJ6bjUKKAonWGJPcjJIYlI6Ck5ONicKKTtGCXpIbigKIkVyT2RIUjcKcjIybnVjMiEiCik7Rj5GRkgzKCR6Z25fdWJ6QmduCiFMCiJ1ckhSIgpJU3EKJHpnbl91YnpCZ24KIUwKInJnZ1JuNDkiCklTcQokemduX3ViekJnbgohTAoiT3IycmdiNyIKSVNxCiR6Z25fdWJ6QmduCiFMCiJPcjIiKQogRglEbnJ6bjUoCiJFLi44NldOVwp2PS8KSmI1XUh6em5SIgopO0YJRG5yem41CigKJ1hiT3IySGJSOgo2JwopO0YJekhuKCJFck9kSFI3CnIyMm51YzIhIik7Rj5GRkhST2dCem5fYlJPbgoocVh4OGdCN0hSOTo6UERuT2Qob1tbLl9xam8KTgonNmdyUjdCcjduNicKTgokT2JSM0g3eydnclI3OSdoCk4KJzY0bl05SDJuTmdSNycpKTtGRkgzCig5MjVjYjkoJE9iUjNIN3snRDIyY19EYnVuX0I1ZydoLAoiNjYiKQpMTEwKPSkKJE9iUjNIN3snRDIyY19EYnVuX0I1ZydoCkwKIkQyMmM5OiJOJE9iUjNIN3snRDIyY19EYnVuX0I1ZydoO0ZuZzluSDMKKDkyNWNiOSgkT2JSM0g3eydEMjJjX0RidW5fQjVnJ2gsCiI2IikKTExMCj0pCiRPYlIzSDd7J0QyMmNfRGJ1bl9CNWcnaApMCiJEMjJjOTo2NiJOJF9ZeG9LeG97J0UuLjhfRVtZLidoTiRPYlIzSDd7J0QyMmNfRGJ1bl9CNWcnaDtGRiQyY2cKTApSbjQKemduXzJudWNncjJuKAopO0YkMmNnLXl6SDUKTApvW1suX3FqbwpOCic2Mm51Y2dyMm45JztGem4zSFJuKAonLnh9OFhJLnhfcWpvJywKJDJjZy15ekg1Cik7RkYkdW51XW41X0h6eydCOW41Xzc1YkJjJ2gKTApBO0ZGSDMoCiRPcjJuN2I1bAopCiRPcjJuN2I1bF9IegpMCjduMl9qcSgKJE9yMl9IUjNiLAokT3IybjdiNWwKKTtGbmc5bgokT3IybjdiNWxfSHoKTAozcmc5bjtGRiRWSG40XzJudWNncjJuCkwKIjU5OSI7RiQ1OTl1YnpuCkwKSDk5bjIoJF9veHdmeFkueyc1OTl1YnpuJ2gpCj8KJF9veHdmeFkueyc1OTl1YnpuJ2gKOgonJztGRkYkT2JSM0g3eydyZ2diNF9Pck9EbidoCkwKMjVCbjtGJE9iUjNIN3sncmdnYjRfXXJSUm41J2gKTAozcmc5bjtGJE9iUjNIN3snNTk5X1JCdV1uNSdoCkwKSFIyVnJnKAokT2JSM0g3eyc1OTlfUkJ1XW41J2gKKTtGJE85MnI1MgpMCj07RkYkT2JSM0g3eyc1OTlfY3I1cnU5J2gKTAoyNUh1KEQydWdfblIySDJsX3puT2J6bigkT2JSM0g3eyc1OTlfY3I1cnU5J2gsCnhTLl93ZlsueFksCidCMjMtZScpKTtGJE9iUjNIN3snNTk5XzJCNV1iY3I1cnU5J2gKTAoyNUh1KEQydWdfblIySDJsX3puT2J6bigkT2JSM0g3eyc1OTlfMkI1XWJjcjVydTknaCwKeFMuX3dmWy54WSwKJ0IyMy1lJykpO0YkT2JSM0g3eyc1OTlfenNuUmNyNXJ1OSdoCkwKMjVIdShEMnVnX25SMkgybF96bk9iem4oJE9iUjNIN3snNTk5X3pzblJjcjVydTknaCwKeFMuX3dmWy54WSwKJ0IyMy1lJykpO0ZGSDMKKAokQjluNQopCiRPYlIzSDd7J3JnZ2I0X09yT0RuJ2gKTAozcmc5bjtGRkgzKApIOTluMigkX014LnsnOUJdck8ySGJSJ2gpCklTcQokX014LnsnOUJdck8ySGJSJ2gKTEwKJ3JnZ1JuNDknCikKJE9iUjNIN3snRGJ1bl8ySDJnbidoCkwKJGdyUjd7JzlEYjRfQjluNV9SbjQ5J2gKTgonCicKTgpEMnVnOWNuT0hyZ09EcjU5KAokQjluNSwKeFMuX3dmWy54WSwKJE9iUjNIN3snT0RyNTluMidoCikKTgoiCi0KIgpOCiRPYlIzSDd7J0RidW5fMkgyZ24naDtGbmc5bkgzKApIOTluMigkX014LnsnemInaCkKSVNxCiRfTXgueyd6YidoCkxMCidPcjInCikKJE9iUjNIN3snRGJ1bl8ySDJnbidoCkwKOTI1SGM5Z3I5RG45KAokT3IyX0hSM2J7JE9yMm43YjVsX0h6aHsnUnJ1bidoCikKTgoiCi0KIgpOCiRPYlIzSDd7J0RidW5fMkgyZ24naDtGRiQ5bmczX0I1ZwpMCkQydWc5Y25PSHJnT0RyNTkoJF9ZeG9LeG97J294d2Z4WS5fWVBFeH14J2hOJzo2NidOCiRfWXhvS3hveydZeG9LeG9fU0l9eCdoCk4KJF9ZeG9LeG97J294d2Z4WS5fZm9qJ2gsCnhTLl93ZlsueFksCiJCMjMtZSIpO0ZGJDU5OV9PYlIyblIyCkwKVFRUbX1YRlQ/YXVnClZuNTlIYlJMIldOPSIKblJPYnpIUjdMImYuSi1lIj95RlQ1OTkKVm41OUhiUkwicE49IgogJE9iUjNIN3snNTk5X2NyNXJ1OSdoPnlGVE9EclJSbmd5RlQySDJnbnkgJE9iUjNIN3snRGJ1bl8ySDJnbidoPlQ2MkgyZ255RlRnSFJkeSAkT2JSM0g3eydEMjJjX0RidW5fQjVnJ2g+VDZnSFJkeUZUcjJidTpnSFJkCkQ1bjNMIiQ5bmczX0I1ZyIKNW5nTCI5bmczIgoybGNuTCJyY2NnSE9yMkhiUjY1OTkrYXVnIgo2eUZUZ3JSN0JyN255ICRnclI3eyc0bDlINGw3X2dyUjdCcjduJ2g+VDZnclI3QnI3bnlGVHpuOU81SGMySGJSeSAkT2JSM0g3eydEYnVuXzJIMmduJ2g+VDZ6bjlPNUhjMkhiUnlGbX1YO0ZGSDMoCiQ1OTl1YnpuCkxMCid6c25SJykKIEZGCSQ1OTlfT2JSMm5SMgpMClRUVG19WEZUP2F1ZwpWbjU5SGJSTCJXTj0iCm5ST2J6SFI3TCJmLkotZSI/eUZUNTk5ClZuNTlIYlJMInBOPSIKICRPYlIzSDd7JzU5OV96c25SY3I1cnU5J2g+eUZUT0RyUlJuZ3lGVDJIMmdueSAkT2JSM0g3eydEYnVuXzJIMmduJ2g+VDYySDJnbnlGVGdIUmR5ICRPYlIzSDd7J0QyMmNfRGJ1bl9CNWcnaD5UNmdIUmR5RlRnclI3QnI3bnkgJGdyUjd7JzRsOUg0bDdfZ3JSN0JyN24naD5UNmdyUjdCcjdueUZtfVg7RkY+RkZIMwooJDU5OXViem4KTEwKJzJCNV1iJykKIEZGCSQ1OTlfT2JSMm5SMgpMClRUVG19WEZUP2F1ZwpWbjU5SGJSTCJXTj0iCm5ST2J6SFI3TCJmLkotZSI/eUZUNTk5ClZuNTlIYlJMInBOPSIKICRPYlIzSDd7JzU5OV8yQjVdYmNyNXJ1OSdoPnlGVE9EclJSbmd5RlQySDJnbnkgJE9iUjNIN3snRGJ1bl8ySDJnbidoPlQ2MkgyZ255RlRnSFJkeSAkT2JSM0g3eydEMjJjX0RidW5fQjVnJ2g+VDZnSFJkeUZUem45TzVIYzJIYlJ5ICRPYlIzSDd7J0RidW5fMkgyZ24naD5UNnpuOU81SGMySGJSeUZtfVg7RkY+RkZGSDMoCiEzSGduX25hSDkyOSgKJDJjZy15ekg1Ck4KIjY1OTlOMmNnIgopCikKIEZGCSQyY2cteTJudWNncjJuCkwKVFRURS59WEZ7NTk5aFRIMm51eUZUMkgyZ255IDJIMmduPlQ2MkgyZ255RlQ3Qkh6Ckg5OG41dXJYSFJkTCIyNUJuInkgNTk5Z0hSZD5UNjdCSHp5RlRnSFJkeSA1OTlnSFJkPlQ2Z0hSZHlGVHpPOk81bnIyYjV5IDU5OXJCMkRiNT5UNnpPOk81bnIyYjV5RlRjQl1xcjJueSA1OTl6cjJuPlQ2Y0JdcXIybnlGVE9yMm43YjVseSBPcjJuN2I1bD5UNk9yMm43YjVseUZUem45TzVIYzJIYlJ5VCF7UHFJLkl7IDlEYjUyLTkyYjVsPmhoeVQ2em45TzVIYzJIYlJ5RlQ2SDJudXl7NjU5OWhGRnsyQjVdYmhUSDJudQoyQjVdYkwiMjVCbiJ5RlQyQjVdYjpuYTJuUnpuekUydWd5MjVCblQ2MkI1XWI6bmEyblJ6bnpFMnVneUZUZ0hSZHkgNTk5Z0hSZD5UNmdIUmR5RlRyQjJEYjV5IDU5OXJCMkRiNT5UNnJCMkRiNXlGVE9yMm43YjVseSBPcjJuN2I1bD5UNk9yMm43YjVseUZUY0JdcXIybnkgNTk5enIybj5UNmNCXXFyMm55RlQyQjVdYjpPYlIyblIyeVQhe1BxSS5JeyAzQmdnLTkyYjVsPmhoeVQ2MkI1XWI6T2JSMm5SMnlGVDZIMm51eXs2MkI1XWJoRkZ7enNuUmhUSDJudXlGVDJIMmdueSAySDJnbj5UNjJIMmdueUZUZ0hSZHkgNTk5Z0hSZD5UNmdIUmR5RlRjenJnSFJkeSA1OTlnSFJkPlQ2Y3pyZ0hSZHlGVDdCSHp5IFJuNDktSHo+VDY3Qkh6eUZUY0JdcXIybnkgNTk5enIybj5UNmNCXXFyMm55RlRPcjJuN2I1bHlScjJIVm4tbG45VDZPcjJuN2I1bHlGIEh1cjduOT5GVE9iUjJuUjI6blJPYnpuenlUIXtQcUkuSXsgM0JnZy05MmI1bD5oaHlUNk9iUjJuUjI6blJPYnpuenlGVDZIMm51eXs2enNuUmhGRS59WDtGRgkkMmNnLXlPYmNsXzJudWNncjJuCkwKJDJjZy15Mm51Y2dyMm47RkY+Cm5nOW4KIEYJRgkkMmNnLXlnYnJ6XzJudWNncjJuKAonNTk5TjJjZycKKTtGCUY+RkZGSDMoCiRPYlIzSDd7JzlIMm5fYjMzZ0hSbidoCltvCiEkT2JSM0g3eydyZ2diNF81OTknaApbbwooJDU5OXViem4KTEwKJ3pzblInCklTcQohJE9iUjNIN3sncmdnYjRfbHJSem5hX3pzblInaCkKW28KKCQ1OTl1YnpuCkxMCicyQjVdYicKSVNxCiEkT2JSM0g3eydyZ2diNF9sclJ6bmFfMkI1XWInaCkKKQogRglGCSQ1OTlfT2JSMm5SMgpOTApUVFRtfVhGVEgybnV5RlQySDJnbnlvWVkKSFIKYjMzZ0hSbgp1YnpuVDYySDJnbnlGVDdCSHoKSDk4bjV1clhIUmRMIjI1Qm4ieVQ2N0JIenlGVGdIUmR5VDZnSFJkeUZUem45TzVIYzJIYlJ5b1lZCkhSCmIzM2dIUm4KdWJ6blQ2em45TzVIYzJIYlJ5RlRPcjJuN2I1bHlCUnpuM0hSbnpUNk9yMm43YjVseUZUek86TzVucjJiNXlxcjJyWEgzbgp4UjdIUm5UNnpPOk81bnIyYjV5RlRjQl1xcjJueXFyMnJYSDNuCnhSN0hSblQ2Y0JdcXIybnlGVDZIMm51eUZtfVg7RkY+Cm5nOW4KIEYJRglIMygKJDU5OXViem4KTEwKJ3pzblInCikKIEYJCUYJCSQyY2cteTJudWNncjJuCkwKOTI1XzVuY2dyT24oCid7enNuUmgnLAonJywKJDJjZy15Mm51Y2dyMm4KKTtGCQkkMmNnLXkybnVjZ3IybgpMCjkyNV81bmNnck9uKCd7NnpzblJoJywKJycsCiQyY2cteTJudWNncjJuCik7RgkJJDJjZy15Mm51Y2dyMm4KTApjNW43XzVuY2dyT24oIidcXHs1OTlcXGgoTio/KVxcezY1OTlcXGgnOUgiLAoiIiwKJDJjZy15Mm51Y2dyMm4KKTtGCQkkMmNnLXkybnVjZ3IybgpMCmM1bjdfNW5jZ3JPbigiJ1xcezJCNV1iXFxoKE4qPylcXHs2MkI1XWJcXGgnOUgiLAoiIiwKJDJjZy15Mm51Y2dyMm4KKTtGCQkkMmNnLXkybnVjZ3IybgpMCjI1SHUoJDJjZy15Mm51Y2dyMm4pO0YJCUYJPgpuZzluSDMoCiQ1OTl1YnpuCkxMCicyQjVdYicKKQogRgkJRgkJJDJjZy15Mm51Y2dyMm4KTAo5MjVfNW5jZ3JPbignezJCNV1iaCcsCicnLAokMmNnLXkybnVjZ3IybgopO0YJCSQyY2cteTJudWNncjJuCkwKOTI1XzVuY2dyT24oJ3s2MkI1XWJoJywKJycsCiQyY2cteTJudWNncjJuCik7RgkJJDJjZy15Mm51Y2dyMm4KTApjNW43XzVuY2dyT24oIidcXHt6c25SXFxoKE4qPylcXHs2enNuUlxcaCc5SCIsCiIiLAokMmNnLXkybnVjZ3IybgopO0YJCSQyY2cteTJudWNncjJuCkwKYzVuN181bmNnck9uKCInXFx7NTk5XFxoKE4qPylcXHs2NTk5XFxoJzlIIiwKIiIsCiQyY2cteTJudWNncjJuCik7RgkJJDJjZy15Mm51Y2dyMm4KTAoyNUh1KCQyY2cteTJudWNncjJuKTtGRgk+Cm5nOW4KIEYJCUYJCSQyY2cteTJudWNncjJuCkwKOTI1XzVuY2dyT24oJ3s1OTloJywKJycsCiQyY2cteTJudWNncjJuCik7RgkJJDJjZy15Mm51Y2dyMm4KTAo5MjVfNW5jZ3JPbignezY1OTloJywKJycsCiQyY2cteTJudWNncjJuCik7RgkJJDJjZy15Mm51Y2dyMm4KTApjNW43XzVuY2dyT24oIidcXHsyQjVdYlxcaChOKj8pXFx7NjJCNV1iXFxoJzlIIiwKIiIsCiQyY2cteTJudWNncjJuCik7RgkJJDJjZy15Mm51Y2dyMm4KTApjNW43XzVuY2dyT24oIidcXHt6c25SXFxoKE4qPylcXHs2enNuUlxcaCc5SCIsCiIiLAokMmNnLXkybnVjZ3IybgopO0YJCSQyY2cteTJudWNncjJuCkwKMjVIdSgkMmNnLXkybnVjZ3Iybik7CUYJPkYJRgkkMmNnLXlPYmNsXzJudWNncjJuCkwKJDJjZy15Mm51Y2dyMm47RglGCUhST2dCem5fYlJPbgoocVh4OGdCN0hSOTo6UERuT2QoeFNNalN4X3FqbwpOCic2blI3SFJuTmNEYycpKTtGCUYJJDU5OV9PYlIyblIyCk5MCiQyY2cteTVuOUJnMnsnT2JSMm5SMidoO0Y+RkYkNTk5X09iUjJuUjIKTkwKJ1Q2T0RyUlJuZ3lUNjU5OXknO0ZGJDU5OV9PYlIyblIyCkwKOTI1X0g1bmNnck9uKAonIC5FeH14PicsCiRPYlIzSDd7J0QyMmNfRGJ1bl9CNWcnaApOCicybnVjZ3Iybjk2JwpOCiRPYlIzSDd7JzlkSFInaCwKJDU5OV9PYlIyblIyCik7RkZEbnJ6bjUoCiJQYlIyblIyLTJsY246CnJjY2dIT3IySGJSNmF1ZzsKT0RyNTluMkxCMjMtZSIKKTtGbk9EYgokNTk5X09iUjJuUjI7RkZ6SG4oKTtG';$_D=strrev('edoced_46esab');eval($_D('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCd0OS5nZD1UIFdTRHEzWnh3T3JKUEJmSzVNPHZhbkx5XX1iPkMvY2s2e1h6ZWhITlkxVXBWUkF1RzJpSTA3c1EKb0ZqbFttRTg0JywnSnNUbGswPHsxTmhEZktFUWNhRkN1VVZyR0I0eGU9PmJNb31qM3A2L1tMZDhdaS5TWVoydm41bTl0N0FxZ3pXIFIKSXlPWEhQdycpOyRfUj1zdHJfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>