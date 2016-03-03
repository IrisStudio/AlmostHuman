-- premake5.lua
workspace "FB"
   configurations { "Debug", "Release"}
   platforms { "x32" }
   location "../bin/"
   language "C++"
   
   filter "configurations:Debug"
      defines { "_DEBUG" }
      flags { "Symbols" }

   filter "configurations:Release"
      defines { "NDEBUG" }
      optimize "On"

project "FB"
   kind "ConsoleApp"
   targetdir "../bin/%{cfg.buildcfg}"
   files { "../src/**.h", "../src/**.cpp" }
   includedirs { "../flatbuffers-master/include/" }
   includedirs { "../flatbuffers-master/samples" }