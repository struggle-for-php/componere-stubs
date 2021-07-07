#!/usr/bin/env bash
diff <(./vendor/bin/psalm --config=psalm-test/psalm.xml --output-format=compact --monochrome --no-progress) ./psalm-test/trace.log