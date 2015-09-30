<?php
$exts = ['php', 'xml'];    // ��Ҫ������ļ���׺, xml�������ļ�, �㻹���԰������html�Ⱥ�׺
$dir = __DIR__;             // ��Ҫ�����Ŀ¼
$file = 'phpant.v1.'.date('Ymd').'.phar';      // ��������, ע������������һ���ļ���, ��stub��Ҳ����Ϊ���ǰ׺
$phar = new Phar(__DIR__ . '/' . $file, FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, $file);
// ��ʼ���
$phar->startBuffering();
// ����׺����ص��ļ����
foreach ($exts as $ext) {
    $phar->buildFromDirectory($dir, '/\.' . $ext . '$/');
}
// ��build.php����ժ��
$phar->delete('build.php');
// �������
$phar->setStub("<?php
Phar::mapPhar('{$file}');
require 'phar://{$file}/Run/index.php';
__HALT_COMPILER();
?>");
$phar->stopBuffering();
// ������
echo "Finished {$file}\n";